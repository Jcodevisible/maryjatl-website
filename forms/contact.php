<?php
  /**
  * MaryJ ATL Contact Form Handler
  * Handles submissions from all site forms: contact, CMA request, prequalification, strategy consult
  */

  $receiving_email_address = 'maryj.atl@kw.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;

  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'] ?? 'Website Visitor';
  $contact->from_email = $_POST['email'] ?? 'noreply@maryjatl.com';

  // Determine subject based on form type
  $form_type = $_POST['form_type'] ?? 'contact';
  switch($form_type) {
    case 'cma':
      $contact->subject = 'CMA Request from MaryJ ATL Website';
      break;
    case 'prequalification':
      $contact->subject = 'Prequalification Request from MaryJ ATL Website';
      break;
    case 'strategy-consult':
      $contact->subject = 'Strategy Consult Request from MaryJ ATL Website';
      break;
    default:
      $contact->subject = $_POST['subject'] ?? 'New Inquiry from MaryJ ATL Website';
  }

  // Common fields
  $contact->add_message($_POST['name'] ?? '', 'Name');
  $contact->add_message($_POST['email'] ?? '', 'Email');
  if (!empty($_POST['phone'])) {
    $contact->add_message($_POST['phone'], 'Phone');
  }

  // Role (for contact form)
  if (!empty($_POST['role'])) {
    $contact->add_message($_POST['role'], 'Role');
  }

  // Property address (for CMA and strategy consult)
  // Handle both naming conventions: property_address and property-address
  if (!empty($_POST['property_address'])) {
    $contact->add_message($_POST['property_address'], 'Property Address');
  } elseif (!empty($_POST['property-address'])) {
    $contact->add_message($_POST['property-address'], 'Property Address');
  }

  // City, State, ZIP (for CMA)
  if (!empty($_POST['city']) || !empty($_POST['state']) || !empty($_POST['zip'])) {
    $location = trim(($_POST['city'] ?? '') . ', ' . ($_POST['state'] ?? '') . ' ' . ($_POST['zip'] ?? ''));
    $contact->add_message($location, 'City/State/ZIP');
  }

  // Purpose (for CMA)
  if (!empty($_POST['purpose'])) {
    $contact->add_message($_POST['purpose'], 'Purpose');
  }

  // Ownership status (for strategy consult)
  if (!empty($_POST['ownership_status'])) {
    $contact->add_message($_POST['ownership_status'], 'Ownership Status');
  }

  // Situation type (for strategy consult and CMA)
  if (!empty($_POST['situation_type'])) {
    $contact->add_message($_POST['situation_type'], 'Situation Type');
  }

  // Request reason (for prequalification)
  if (!empty($_POST['request_reason'])) {
    $contact->add_message($_POST['request_reason'], 'Purpose');
  }

  // Timeline
  if (!empty($_POST['timeline'])) {
    $contact->add_message($_POST['timeline'], 'Timeline');
  }

  // Format preference (for strategy consult)
  if (!empty($_POST['format_preference'])) {
    $contact->add_message($_POST['format_preference'], 'Preferred Format');
  }

  // Contact preference
  if (!empty($_POST['contact_preference'])) {
    $contact->add_message($_POST['contact_preference'], 'Contact Preference');
  }

  // Message (always last)
  if (!empty($_POST['message'])) {
    $contact->add_message($_POST['message'], 'Message', 10);
  }

  echo $contact->send();
?>
