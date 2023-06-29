<?php

namespace App\Http\Controllers;

use Google_Client;
use Google_Service_Calendar;
use Google_Service_Calendar_Event;
use Google_Service_Calendar_EventAttendee;
use Illuminate\Http\Request;

class MeetController extends Controller
{
    public function createMeeting(Request $request)
    {
        // Créer un client Google API
        $client = new Google_Client();
        $client->setClientId(env('GOOGLE_CLIENT_ID'));
        $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));
        $client->addScope(Google_Service_Calendar::CALENDAR_EVENTS);

        // Obtenir l'URL d'autorisation OAuth
        $authUrl = $client->createAuthUrl();

        // Rediriger l'utilisateur vers l'URL d'autorisation
        return redirect($authUrl);
    }

    public function callback(Request $request)
    {
        // Récupérer le code d'autorisation OAuth depuis la requête
        $code = $request->get('code');
        dd($code);
        // Créer un client Google API
        $client = new Google_Client();
        $client->setClientId(env('GOOGLE_CLIENT_ID'));
        $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));
        $client->addScope(Google_Service_Calendar::CALENDAR_EVENTS);

        // Échanger le code d'autorisation contre un jeton d'accès
        $accessToken = $client->fetchAccessTokenWithAuthCode($code);

        // Stocker le jeton d'accès dans la session (ou dans une base de données)
        session(['access_token' => $accessToken]);

        // Rediriger l'utilisateur vers la vue de création de réunion
        return redirect()->route('meet.create');
    }

    public function showCreateForm()
    {
        return view('meet.create');
    }

    public function storeMeeting(Request $request)
    {
        // Récupérer le jeton d'accès depuis la session (ou depuis une base de données)
        $accessToken = session('access_token');
        dd($accessToken);
        // Créer un client Google API avec le jeton d'accès
        $client = new Google_Client();
        $client->setAccessToken($accessToken);

        // Créer un service Google Calendar
        $service = new Google_Service_Calendar($client);

        // Créer un nouvel événement Google Calendar
        $event = new Google_Service_Calendar_Event();
        $event->setSummary($request->input('summary'));
        $event->setDescription($request->input('description'));

        // Définir les détails de la réunion Google Meet
        $conference = new Google_Service_Calendar_EventConferenceData();
        $conference->setCreateRequest(['requestId' => 'your-request-id']);
        $conference->setConferenceSolutionKey(['type' => 'hangoutsMeet']);
        $event->setConferenceData($conference);

        // Enregistrer l'événement dans Google Calendar
        $calendarId = 'primary'; // ID du calendrier Google par défaut
        $event = $service->events->insert($calendarId, $event);

        // Rediriger l'utilisateur vers la vue de détails de la réunion
        return redirect()->route('meet.show', $event->getId());
    }

    public function showMeeting($eventId)
    {
        // Récupérer le jeton d'accès depuis la session (ou depuis une base de données)
        $accessToken = session('access_token');

        // Créer un client Google API avec le jeton d'accès
        $client = new Google_Client();
        $client->setAccessToken($accessToken);

        // Créer un service Google Calendar
        $service = new Google_Service_Calendar($client);

        // Obtenir les détails de l'événement Google Calendar
        $event = $service->events->get('primary', $eventId);

        // Afficher les détails de la réunion
        return view('meet.show', compact('event'));
    }
}
