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
    'greeting'                                => 'Γεια σου,',
    'closing'                                 => 'Μπιπ μπιπ,',
    'signature'                               => 'Το Ρομπότ Αλληλογραφίας του Firefly III',
    'footer_ps'                               => 'ΥΓ: Αυτό το μήνυμα στάλθηκε επειδή μια αίτηση από την IP :ipAddress το ενεργοποίησε.',

    // admin test
    'admin_test_subject'                      => 'Ένα δοκιμαστικό μήνυμα από την εγκατάσταση του Firefly III',
    'admin_test_body'                         => 'Αυτό είναι ένα δοκιμαστικό μήνυμα από την εγκατάσταση του Firefly III. Αποστάλθηκε στο :email.',

    // invite
    'invitation_created_subject'              => 'An invitation has been created',
    'invitation_created_body'                 => 'Admin user ":email" created a user invitation which can be used by whoever is behind email address ":invitee". The invite will be valid for 48hrs.',
    'invite_user_subject'                     => 'You\'ve been invited to create a Firefly III account.',
    'invitation_introduction'                 => 'You\'ve been invited to create a Firefly III account on **:host**. Firefly III  is a personal, self-hosted, private personal finance manager. All the cool kids are using it.',
    'invitation_invited_by'                   => 'You\'ve been invited by ":admin" and this invitation was sent to ":invitee". That\'s you, right?',
    'invitation_url'                          => 'The invitation is valid for 48 hours and can be redeemed by surfing to [Firefly III](:url). Enjoy!',

    // new IP
    'login_from_new_ip'                       => 'Νέα σύνδεση χρήστη στο Firefly III',
    'slack_login_from_new_ip'                 => 'New Firefly III login from IP :ip (:host)',
    'new_ip_body'                             => 'Το Firefly III εντόπισε μια νέα σύνδεση στο λογαριασμό σας από μια άγνωστη διεύθυνση IP. Αν δεν συνδεθήκατε ποτέ από την παρακάτω διεύθυνση IP ή έγινε πριν από περισσότερο από έξι μήνες, το Firefly III θα σας προειδοποιήσει.',
    'new_ip_warning'                          => 'Αν αναγνωρίζετε αυτή τη διεύθυνση IP ή τη σύνδεση χρήστη, μπορείτε να αγνοήσετε αυτό το μήνυμα. Αν δεν συνδεθήκατε, αν δεν έχετε ιδέα για το τι είναι αυτό, επαληθεύστε ένα ασφαλή κωδικό πρόσβασης, αλλάξτε τον και αποσυνδεθείτε από όλες τις άλλες συνεδρίες. Για να το κάνετε αυτό, πηγαίνετε στη σελίδα του προφίλ σας. Φυσικά έχετε ήδη ενεργοποιημένο το 2FactorAuthentication, έτσι? Μείνετε ασφαλείς!',
    'ip_address'                              => 'Διεύθυνση IP',
    'host_name'                               => 'Διακομιστής',
    'date_time'                               => 'Ημερομηνία και ώρα',

    // access token created
    'access_token_created_subject'            => 'Δημιουργήθηκε ένα νέο διακριτικό πρόσβασης',
    'access_token_created_body'               => 'Κάποιος (ελπίζω εσείς) μόλις δημιούργησε ένα νέο Διακριτικό Πρόσβασης Firefly III API για το δικό σας λογαριασμό χρήστη.',
    'access_token_created_explanation'        => 'With this token, they can access **all** of your financial records through the Firefly III API.',
    'access_token_created_revoke'             => 'If this wasn\'t you, please revoke this token as soon as possible at :url',

    // registered
    'registered_subject'                      => 'Καλωσήρθατε στο Firefly III!',
    'registered_subject_admin'                => 'A new user has registered',
    'admin_new_user_registered'               => 'A new user has registered. User **:email** was given user ID #:id.',
    'registered_welcome'                      => 'Welcome to [Firefly III](:address). Your registration has made it, and this email is here to confirm it. Yay!',
    'registered_pw'                           => 'If you have forgotten your password already, please reset it using [the password reset tool](:address/password/reset).',
    'registered_help'                         => 'Υπάρχει ένα εικονίδιο βοήθειας στην επάνω δεξιά γωνία κάθε σελίδας. Αν χρειάζεστε βοήθεια, κάντε κλικ σε αυτό!',
    'registered_doc_html'                     => 'If you haven\'t already, please read the [grand theory](https://docs.firefly-iii.org/about-firefly-iii/personal-finances).',
    'registered_doc_text'                     => 'If you haven\'t already, please also read the first use guide and the full description.',
    'registered_closing'                      => 'Καλή Διασκέδαση!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Επαναφορά κωδικού πρόσβασης:',
    'registered_doc_link'                     => 'Τεκμηρίωση:',

    // new version
    'new_version_email_subject'               => 'A new Firefly III version is available',

    // email change
    'email_change_subject'                    => 'Η διεύθυνση email σας στο Firefly III έχει αλλάξει',
    'email_change_body_to_new'                => 'Εσείς ή κάποιος με πρόσβαση στο λογαριασμό σας στο Firefly III έχει αλλάξει τη διεύθυνση ηλεκτρονικού ταχυδρομείου σας. Αν δεν περιμένατε αυτό το μήνυμα, παρακαλώ αγνοήστε και διαγράψτε το.',
    'email_change_body_to_old'                => 'You or somebody with access to your Firefly III account has changed your email address. If you did not expect this to happen, you **must** follow the "undo"-link below to protect your account!',
    'email_change_ignore'                     => 'Αν ξεκινήσατε αυτήν την αλλαγή, μπορείτε να αγνοήσετε με ασφάλεια αυτό το μήνυμα.',
    'email_change_old'                        => 'Η παλιά διεύθυνση ηλεκτρονικού ταχυδρομείου ήταν: :email',
    'email_change_old_strong'                 => 'Η παλιά διεύθυνση ηλεκτρονικού ταχυδρομείου ήταν: **:email**',
    'email_change_new'                        => 'Η νέα διεύθυνση ηλεκτρονικού ταχυδρομείου είναι: :email',
    'email_change_new_strong'                 => 'Η νέα διεύθυνση ηλεκτρονικού ταχυδρομείου είναι: **:email**',
    'email_change_instructions'               => 'Δεν μπορείτε να χρησιμοποιήσετε το Firefly III μέχρι να επιβεβαιώσετε αυτήν την αλλαγή. Ακολουθήστε τον παρακάτω σύνδεσμο για να το κάνετε.',
    'email_change_undo_link'                  => 'Για να αναιρέσετε την αλλαγή, ακολουθήστε αυτόν τον σύνδεσμο:',

    // OAuth token created
    'oauth_created_subject'                   => 'Δημιουργήθηκε ένας νέος πελάτης OAuth',
    'oauth_created_body'                      => 'Somebody (hopefully you) just created a new Firefly III API OAuth Client for your user account. It\'s labeled ":name" and has callback URL `:url`.',
    'oauth_created_explanation'               => 'With this client, they can access **all** of your financial records through the Firefly III API.',
    'oauth_created_undo'                      => 'If this wasn\'t you, please revoke this client as soon as possible at `:url`',

    // reset password
    'reset_pw_subject'                        => 'Αίτημα επαναφοράς κωδικού πρόσβασης',
    'reset_pw_instructions'                   => 'Κάποιος θέλει να κάνει επαναφορά για τον κωδικό πρόσβασής σας. Αν ήσασταν εσείς, παρακαλούμε ακολουθήστε τον παρακάτω σύνδεσμο για να το κάνετε.',
    'reset_pw_warning'                        => '**PLEASE** verify that the link actually goes to the Firefly III you expect it to go!',

    // error
    'error_subject'                           => 'Βρέθηκε ένα σφάλμα στο Firefly III',
    'error_intro'                             => 'Το Firefly III v:version συνάντησε ένα σφάλμα: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'Το σφάλμα ήταν του τύπου ":class".',
    'error_timestamp'                         => 'Το σφάλμα προέκυψε την/στις: :time.',
    'error_location'                          => 'Αυτό το σφάλμα προέκυψε στο αρχείο "<span style="font-family: monospace;">:file</span>" στη γραμμή :line με τον κωδικό :code.',
    'error_user'                              => 'Το σφάλμα προέκυψε στο χρήστη #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                           => 'Δεν υπήρξε κανένας συνδεδεμένος χρήστης για αυτό το σφάλμα ή κανένας χρήστης δεν εντοπίστηκε.',
    'error_ip'                                => 'Η διεύθυνση IP που σχετίζεται με αυτό το σφάλμα είναι: :ip',
    'error_url'                               => 'Το URL είναι: :url',
    'error_user_agent'                        => 'User agent: :userAgent',
    'error_stacktrace'                        => 'Το πλήρες stacktrace είναι παρακάτω. Αν νομίζετε ότι αυτό είναι ένα σφάλμα στο Firefly III, μπορείτε να προωθήσετε αυτό το μήνυμα στο <a href="mailto:james@firefly-iii.org?subject=BUG!">james@firefly-iii.org</a>. Αυτό μπορεί να βοηθήσει στη διόρθωση του σφάλματος που μόλις αντιμετωπίσατε.',
    'error_github_html'                       => 'Αν προτιμάτε, μπορείτε επίσης να ανοίξετε ένα νέο ζήτημα στο <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                       => 'Αν προτιμάτε, μπορείτε επίσης να ανοίξετε ένα νέο ζήτημα στο https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                  => 'Το πλήρες stacktrace είναι παρακάτω:',
    'error_headers'                           => 'The following headers may also be relevant:',

    // report new journals
    'new_journals_subject'                    => 'Το Firefly III έχει δημιουργήσει μια νέα συναλλαγή|Το Firefly III έχει δημιουργήσει :count νέες συναλλαγές',
    'new_journals_header'                     => 'Το Firefly III έχει δημιουργήσει μια συναλλαγή για εσάς. Μπορείτε να τη βρείτε στην εγκατάσταση Firefly ΙΙΙ:|Το Firefly III έχει δημιουργήσει :count συναλλαγές για εσάς. Μπορείτε να τις βρείτε στην εγκατάσταση Firefly III:',

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
