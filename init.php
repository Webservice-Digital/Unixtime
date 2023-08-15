<?php
/**
 * Unixtime API
 *
 * This API provides the current Unix timestamp along with the requesting domain,
 * metadata, and developer information.
 *
 * Developer: Jan Gebser | Brainhub24
 * GitHub Repository: https://github.com/Webservice-Digital/Unixtime/
 * Company: netcore.digital
 */

// Set the content type to JSON
// https://reqbin.com/req/abghm4zf/json-content-type
header('Content-Type: application/json');

try {
    // Get the current Unix timestamp
    // https://www.php.net/manual/en/function.time.php
    $unixTime = time();

    // Get the domain from which the request is being made
    // https://www.php.net/manual/en/reserved.variables.server.php
    $requestDomain = $_SERVER['HTTP_HOST'];

    // GitHub repository URL
    $githubRepo = 'https://github.com/Webservice-Digital/Unixtime/';

    // Company information
    $company = 'netcore.digital';

    // Create a structured response array
    // https://www.php.net/manual/en/function.array
    $response = array(
        'success' => true,
        'data' => array(
            'unixtime' => $unixTime,
            'domain' => $requestDomain,
            'metadata' => array(
                'github_repo' => $githubRepo,
                'company' => $company
            )
        )
    );

    // Convert the response array to JSON and output it
    // https://www.geeksforgeeks.org/php-json-pretty-print
    echo json_encode($response, JSON_PRETTY_PRINT);
} catch (Exception $e) {
    // Handle errors and provide an informative response
    // https://www.php.net/manual/en/language.exceptions.php
    $response = array(
        'success' => false,
        'error' => 'An error occurred.'
    );
    echo json_encode($response, JSON_PRETTY_PRINT);
}
?>
