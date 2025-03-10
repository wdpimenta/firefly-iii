<?php

/**
 * email.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // common items
    'greeting'                                => 'Salut,',
    'closing'                                 => 'Bip boop,',
    'signature'                               => 'Robot Mail Firefly III',
    'footer_ps'                               => 'PS: Acest mesaj a fost trimis deoarece o solicitare de la IP :ipAddress a declanşat-o.',

    // admin test
    'admin_test_subject'                      => 'Un mesaj de testare de la instalarea Firefly III',
    'admin_test_body'                         => 'Acesta este un mesaj de test de la instanța dvs. Firefly III. Acesta a fost trimis la :email.',

    // invite
    'invitation_created_subject'              => 'An invitation has been created',
    'invitation_created_body'                 => 'Admin user ":email" created a user invitation which can be used by whoever is behind email address ":invitee". The invite will be valid for 48hrs.',
    'invite_user_subject'                     => 'You\'ve been invited to create a Firefly III account.',
    'invitation_introduction'                 => 'You\'ve been invited to create a Firefly III account on **:host**. Firefly III  is a personal, self-hosted, private personal finance manager. All the cool kids are using it.',
    'invitation_invited_by'                   => 'You\'ve been invited by ":admin" and this invitation was sent to ":invitee". That\'s you, right?',
    'invitation_url'                          => 'The invitation is valid for 48 hours and can be redeemed by surfing to [Firefly III](:url). Enjoy!',

    // new IP
    'login_from_new_ip'                       => 'Autentificare nouă pe Firefly III',
    'slack_login_from_new_ip'                 => 'New Firefly III login from IP :ip (:host)',
    'new_ip_body'                             => 'Firefly III a detectat o nouă autentificare în contul dvs. de la o adresă IP necunoscută. Dacă nu v-ați conectat niciodată de la adresa IP de mai jos, sau a trecut mai mult de șase luni, Firefly III vă va avertiza.',
    'new_ip_warning'                          => 'Dacă recunoști această adresă IP sau autentificare, poți ignora acest mesaj. Dacă nu te-ai logat, sau dacă nu ai nici o idee despre ce este vorba, verifică-ți securitatea, schimbă-o și deconectează toate celelalte sesiuni. Pentru a face acest lucru, accesați pagina de profil. Bineînțeles că ai Autentificare în Doi Pași activat deja, nu? Rămâi în siguranță!',
    'ip_address'                              => 'Adresa IP',
    'host_name'                               => 'Gazdă',
    'date_time'                               => 'Dată și oră',

    // access token created
    'access_token_created_subject'            => 'Un nou token de acces a fost creat',
    'access_token_created_body'               => 'Cineva (sperăm că dvs.) tocmai a creat un nou Firefly III API Access Token pentru contul dvs. de utilizator.',
    'access_token_created_explanation'        => 'With this token, they can access **all** of your financial records through the Firefly III API.',
    'access_token_created_revoke'             => 'If this wasn\'t you, please revoke this token as soon as possible at :url',

    // registered
    'registered_subject'                      => 'Bun venit la Firefly III!',
    'registered_subject_admin'                => 'A new user has registered',
    'admin_new_user_registered'               => 'A new user has registered. User **:email** was given user ID #:id.',
    'registered_welcome'                      => 'Welcome to [Firefly III](:address). Your registration has made it, and this email is here to confirm it. Yay!',
    'registered_pw'                           => 'If you have forgotten your password already, please reset it using [the password reset tool](:address/password/reset).',
    'registered_help'                         => 'Există o pictogramă de ajutor în colțul din dreapta sus al fiecărei pagini. Dacă ai nevoie de ajutor, apasă pe ea!',
    'registered_doc_html'                     => 'If you haven\'t already, please read the [grand theory](https://docs.firefly-iii.org/about-firefly-iii/personal-finances).',
    'registered_doc_text'                     => 'If you haven\'t already, please also read the first use guide and the full description.',
    'registered_closing'                      => 'Bucurați-vă de el!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Resetare parolă:',
    'registered_doc_link'                     => 'Documentaţie:',

    // new version
    'new_version_email_subject'               => 'A new Firefly III version is available',

    // email change
    'email_change_subject'                    => 'Adresa ta de email a fost schimbată',
    'email_change_body_to_new'                => 'Dumneavoastră sau cineva cu acces la contul dvs. Firefly III v-a schimbat adresa de e-mail. Dacă nu ați așteptat acest mesaj, vă rugăm să îl ignorați și să îl ștergeți.',
    'email_change_body_to_old'                => 'You or somebody with access to your Firefly III account has changed your email address. If you did not expect this to happen, you **must** follow the "undo"-link below to protect your account!',
    'email_change_ignore'                     => 'Dacă ați inițiat această schimbare, puteți ignora în siguranță acest mesaj.',
    'email_change_old'                        => 'Vechea adresă de e-mail a fost: :email',
    'email_change_old_strong'                 => 'The old email address was: **:email**',
    'email_change_new'                        => 'Noua adresă de e-mail este: :email',
    'email_change_new_strong'                 => 'The new email address is: **:email**',
    'email_change_instructions'               => 'Nu puteți utiliza Firefly III până când nu confirmați această modificare. Vă rugăm să urmați link-ul de mai jos pentru a face acest lucru.',
    'email_change_undo_link'                  => 'Pentru a anula modificarea, urmați acest link:',

    // OAuth token created
    'oauth_created_subject'                   => 'Un nou client OAuth a fost creat',
    'oauth_created_body'                      => 'Somebody (hopefully you) just created a new Firefly III API OAuth Client for your user account. It\'s labeled ":name" and has callback URL `:url`.',
    'oauth_created_explanation'               => 'With this client, they can access **all** of your financial records through the Firefly III API.',
    'oauth_created_undo'                      => 'If this wasn\'t you, please revoke this client as soon as possible at `:url`',

    // reset password
    'reset_pw_subject'                        => 'Solicitarea de resetare a parolei',
    'reset_pw_instructions'                   => 'Cineva a încercat să-ți reseteze parola. Dacă ai fost, te rugăm să urmezi link-ul de mai jos pentru a face acest lucru.',
    'reset_pw_warning'                        => '**PLEASE** verify that the link actually goes to the Firefly III you expect it to go!',

    // error
    'error_subject'                           => 'Am descoperit o eroare în Firefly III',
    'error_intro'                             => 'Firefly III v:version a întâmpinat o eroare: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'Eroarea a fost de tip ":class".',
    'error_timestamp'                         => 'Eroarea a apărut pe/la: :time.',
    'error_location'                          => 'Această eroare a apărut în fișierul "<span style="font-family: monospace;">:file</span>" pe linia :line cu codul :code.',
    'error_user'                              => 'Eroarea a fost întâlnită de utilizatorul #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                           => 'Nu a existat niciun utilizator conectat pentru această eroare sau niciun utilizator nu a fost detectat.',
    'error_ip'                                => 'Adresa IP asociată acestei erori este: :ip',
    'error_url'                               => 'URL-ul este: :url',
    'error_user_agent'                        => 'Agent utilizator: :userAgent',
    'error_stacktrace'                        => 'Lantul erorilor este mai jos. Dacă credeți că acesta este un bug în Firefly III, puteți transmite acest mesaj la <a href="mailto:james@firefly-iii.org?subject=BUG!">james@firefly-iii. rg</a>. Acest lucru poate ajuta la rezolvarea problemei pe care tocmai ați întâlnit-o.',
    'error_github_html'                       => 'Dacă preferați, puteți de asemenea deschide o nouă problemă pe <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                       => 'Dacă preferați, puteți de asemenea deschide o nouă problemă pe <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_stacktrace_below'                  => 'Stacktrack-ul complet este mai jos:',
    'error_headers'                           => 'The following headers may also be relevant:',

    // report new journals
    'new_journals_subject'                    => 'Firefly III a creat o nouă tranzacție, Firefly III a creat :count tranzacții noi',
    'new_journals_header'                     => 'Firefly III a creat o tranzacție pentru dvs. O puteți găsi în instalarea dvs. Firefly III:|Firefly III a creat :count tranzacții pentru dvs. Le puteți găsi în instalarea Firefly III:',

    // bill warning
    'bill_warning_subject_end_date'           => 'Your bill ":name" is due to end in :diff days',
    'bill_warning_subject_now_end_date'       => 'Your bill ":name" is due to end TODAY',
    'bill_warning_subject_extension_date'     => 'Your bill ":name" is due to be extended or cancelled in :diff days',
    'bill_warning_subject_now_extension_date' => 'Your bill ":name" is due to be extended or cancelled TODAY',
    'bill_warning_end_date'                   => 'Your bill **":name"** is due to end on :date. This moment will pass in about **:diff days**.',
    'bill_warning_extension_date'             => 'Your bill **":name"** is due to be extended or cancelled on :date. This moment will pass in about **:diff days**.',
    'bill_warning_end_date_zero'              => 'Your bill **":name"** is due to end on :date. This moment will pass **TODAY!**',
    'bill_warning_extension_date_zero'        => 'Your bill **":name"** is due to be extended or cancelled on :date. This moment will pass **TODAY!**',
    'bill_warning_please_action'              => 'Please take the appropriate action.',

];
