<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tts extends CI_Controller {

    public function hindi()
    {
        try {
            $text = $this->input->get('text');
            
            if (empty($text)) {
                throw new Exception('No text provided');
            }

            // Encode the text for URL
            $encodedText = urlencode($text);
            
            // Google Translate TTS endpoint
            $url = "https://translate.google.com/translate_tts?ie=UTF-8&q={$encodedText}&tl=hi&client=tw-ob&ttsspeed=1";

            // Get the audio content
            $audioContent = @file_get_contents($url);
            
            if ($audioContent === false) {
                throw new Exception('Failed to fetch audio from Google TTS');
            }
            
            // Set headers for audio response
            header('Content-Type: audio/mpeg');
            header('Content-Disposition: inline; filename="tts.mp3"');
            header('Content-Length: ' . strlen($audioContent));
            
            // Output the audio content
            echo $audioContent;
            
        } catch (Exception $e) {
            log_message('error', 'TTS Error: ' . $e->getMessage());
            show_error('Error generating speech: ' . $e->getMessage(), 500);
        }
    }
}