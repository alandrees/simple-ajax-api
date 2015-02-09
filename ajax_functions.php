<?php
/** @file */
/**
 * Copyright 2014 Alan Drees
 *
 * Author:
 *  Alan Drees
 *
 * Purpose:
 *  Contains all the ajax api related functions
 *
 * Requires:
 *  None
 *
 * Dependencies:
 *  None
 *
 */

/*************/
/* functions */
/*************/

/**\fn output_ajax_data
 *
 * Output the ajax data formatted properly
 *
 * @param $json (mixed) json data to be output
 * @param $html (string) html data to be output
 * @param $code (integer) status code of the request
 * @param $messages (string) status message
 *
 * @returns (string) JSON-encoded string with the given strucutre (to be parsed by the ajax api call)
 */

function output_ajax_data($json = '', $html = '', $code = 0, $message = 'OK')
{
   return json_encode(array('code'    => $code,
                            'message' => $message,
                            'html'    => $html,
                            'json'    => $json));
}


/**\fn validate_function_signature
 *
 * Validates a function signature with the required arguments.
 *
 * @param $param_array paramater array to check the signature against
 * @param $parameters paramters to check for
 *
 * @returns Boolean True if $param_array at minimum satisfies the the paramter list, False otherwise
 */


function validate_function_signature($param_array, $parameters)
{
   foreach($parameters as $param)
   {
      if(!isset($param_array[$param]))
      {
         return False;
      }
   }

   return True;
}

?>