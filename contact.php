<?php
/*
 *  CONFIGURE EVERYTHING HERE
 */

// an email address that will be in the From field of the email.
$from = $_POST['email'];

// an email address that will receive the email with the output of the form
$sendTo = 'operacional@loguber.com.br , maxebina@gmail.com';

// subject of the email
$subject = $_POST['assunto'];

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('assunto' => 'Assunto', 'name' => 'Nome', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'telefone' => 'Telefone', 'estado_origem' => 'Estado origem', 'message' => 'Messagem', 'veiculo' => 'Veículo', 'carga' => 'Carga', 'empresa' => 'Empresa', 'endereco' => 'Endereço', 'estado' => 'Estado', 'cidade' => 'Cidade', 'regiao' => 'Região Atendida', 'antt' => 'Possui Cadastro na ANTT?', 'veiculos' => 'Informações sobre os veículos', 'outros_veiculos' => 'Outros veículos', 'interesse' => 'Estou interessado em', 'outras_informacoes' => 'Outras informações'); 

// message that will be displayed when everything is OK :)
$okMessage = 'Mensagem enviada com sucesso. Obrigado. Entraremos em contato em breve!';

// If something goes wrong, we will display this message.
$errorMessage = 'Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.';

/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try
{

    if(count($_POST) == 0) throw new \Exception('Form is empty');
            
    $emailText = "Você tem uma nova mensagem do site\n=============================\n";

    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email 
        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    // All the neccessary headers for the email.
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
    );
    
    // Send email
    mail($sendTo, $subject, $emailText, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}
