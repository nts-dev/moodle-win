<?php

ini_set('display_errors', '1');
header("Access-Control-Allow-Origin: *");
require __DIR__ . '/config.php';
// Make the connection:
$dbc = mysqli_connect('localhost', 'projectuser', 'wgnd8b', 'nts_site');

if (!$dbc) {
    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_NUMBER_INT);

switch ($action) {

    case 1:

        $course_id = filter_input(INPUT_POST, 'course', FILTER_SANITIZE_NUMBER_INT);
        $section_id = filter_input(INPUT_POST, 'section', FILTER_SANITIZE_NUMBER_INT);
        $section_name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

        $page_id = exec('"C:\xampp\moosh" -n activity-add --name="' . $section_name . '" --section=' . $section_id . ' --options="--content=' . $section_name . '" page ' . $course_id);

        if ($page_id) {
            $data['data'] = array('response' => true, 'text' => 'Successfully Added', 'row_id' => $page_id);
        } else {
            $data['data'] = array('response' => false, 'text' => 'An Error Occured While Saving');
        }
        echo json_encode($data);
        break;

    case 2:

        $course_id = filter_input(INPUT_GET, 'course', FILTER_SANITIZE_NUMBER_INT);
        $section_id = filter_input(INPUT_GET, 'section', FILTER_SANITIZE_NUMBER_INT);

        $page_id = exec('"C:\xampp\moosh" -n activity-add --name="' . $section_id . '" --section=' . $section_id . ' --options="--content=Long content description" page 12');

        if ($page_id) {
            $data['data'] = array('response' => true, 'text' => 'Successfully Added', 'row_id' => $page_id);
        } else {
            $data['data'] = array('response' => false, 'text' => 'An Error Occured While Saving');
        }
        echo json_encode($data);
        break;

    case 3:

        $course_id = filter_input(INPUT_GET, 'course', FILTER_SANITIZE_NUMBER_INT);
        $index = filter_input(INPUT_POST, 'index');
        $fieldvalue = filter_input(INPUT_POST, 'fieldvalue');
        $id = filter_input(INPUT_POST, 'id');
        $field = filter_input(INPUT_POST, 'colId');
        $colType = filter_input(INPUT_POST, 'colType');
        $fieldvalue = mysqli_real_escape_string($dbc, $fieldvalue);

        $updateResult = exec('"C:\xampp\moosh" -n activity-config-set activity ' . $id . ' page name "' . $fieldvalue . '"');

        if ($updateResult) {

            exec('"C:\xampp\moosh" -n cache-course-rebuild ' . $course_id);
            $data['data'] = array('response' => $updateResult, 'text' => 'Successfully Updated');
        } else {
            $data['data'] = array('response' => $updateResult, 'text' => 'An Error Occured While Saving');
        }

        echo json_encode($data);
        break;

    case 4:

        $course_id = filter_input(INPUT_GET, 'course', FILTER_SANITIZE_NUMBER_INT);
        $fieldvalue = filter_input(INPUT_POST, 'fieldvalue');
        $id = filter_input(INPUT_POST, 'id');
        $fieldvalue = mysqli_real_escape_string($dbc, $fieldvalue);

        $updateResult = exec('"C:\xampp\moosh" -n activity-config-set activity ' . $id . ' page content "' . $fieldvalue . '"');

        if ($updateResult) {

            exec('"C:\xampp\moosh" -n cache-course-rebuild ' . $course_id);
            $data['data'] = array('response' => $updateResult, 'text' => 'Successfully Updated');
        } else {
            $data['data'] = array('response' => $updateResult, 'text' => 'An Error Occured While Saving');
        }

        echo json_encode($data);
        break;

    case 5:

        $course_id = filter_input(INPUT_POST, 'course_id',FILTER_SANITIZE_NUMBER_INT);
        $section_id = filter_input(INPUT_POST, 'section_id', FILTER_SANITIZE_NUMBER_INT);
        $section_name = filter_input(INPUT_POST, 'page_name', FILTER_SANITIZE_STRING);
        $intro='';
		
        $lesson_id = exec('"C:\xampp\moosh" -n activity-add --name="' . $section_name . '" --section=' . $section_id . ' --options="--title=' .$intro. '" lesson ' . $course_id);

        $dataobject = (object) array('id' => $lesson_id, 'intro' => '');

        $updateResult = $DB->update_record('lesson', $dataobject, $bulk = false);

        $module_id = $DB->get_field('course_modules', 'id', ['instance' => $lesson_id, 'module' => 13], $strictness = IGNORE_MISSING);

        if ($lesson_id) {
            $data['data'] = array('response' => true, 'text' => 'Successfully Added', 'row_id' => $lesson_id,'module_id'=>0, 'command' => $command);
        } else {
            $data['data'] = array('response' => false, 'text' => 'An Error Occured While Saving', 'command' => $command);
        }
        echo json_encode($data);
        break;

        break;

    case 6:

        $course_id = filter_input(INPUT_POST, 'course_id', FILTER_SANITIZE_NUMBER_INT);
        $docid =     filter_input(INPUT_POST, 'docid', FILTER_SANITIZE_NUMBER_INT);
        $course_name = filter_input(INPUT_POST, 'doc_name', FILTER_SANITIZE_STRING);

        $counter = 1;
        $version = 'Version';
        $filename = 'Version_' . $counter . str_replace(" ", "", $course_name);

        $response = exec('"C:\xampp\moosh" -n course-backup -f my_backups/"' . $filename . '".mbz ' . $course_id);

        $data = [
            'response' => true,
            'version' => $course_name . ' ' . $version . ' ' . $counter,
            'file_name' => $filename . '.mbz',
            'docid'=> $docid,
            'text' => $response,
        ];

        while ($response == null) {

            $filename = 'Version_' . $counter . str_replace(" ", "", $course_name);
            $response = exec('"C:\xampp\moosh" -n course-backup -f my_backups/"' . $filename . '".mbz ' . $course_id);

            $data = [
                'response' => true,
                'version' => $course_name . ' ' . $version . ' ' . $counter,
                'file_name' => $filename . '.mbz',
                'docid'=> $docid,
                'text' => $response,
            ];

            $counter++;

        }

        echo json_encode($data);
        break;

    case 7:

        $course_id =  filter_input(INPUT_POST, 'course_id', FILTER_SANITIZE_NUMBER_INT);
        //$section_id = filter_input(INPUT_POST, 'section_id', FILTER_SANITIZE_NUMBER_INT);
        $course_name = filter_input(INPUT_POST, 'doc_name', FILTER_SANITIZE_STRING);

        $filename = 'mdl_backup' . str_replace(" ", "", $course_name);

        $response = exec('"C:\xampp\moosh" course-restore --overwrite my_backups/"' . $course_name . '" ' . $course_id);

        if ($response) {
            $data['data'] = array('response' => true, 'text' => $response);
        } else {
            $data['data'] = array('response' => false, 'text' => $response);
        }
        echo json_encode($data);

        break;

    case 8:

        $module_id = filter_input(INPUT_GET, 'course', FILTER_SANITIZE_NUMBER_INT);
        // $section_id = filter_input(INPUT_GET, 'section', FILTER_SANITIZE_NUMBER_INT);

        $response = exec('"C:\xampp\moosh" activity-delete' . $module_id);

        if ($response) {
            $data['data'] = array('response' => true, 'text' => 'Deleted!');
        } else {
            $data['data'] = array('response' => false, 'text' => 'Problem Occured!');
        }
        echo json_encode($data);
        break;

    case 9:

        $module_id = filter_input(INPUT_POST, 'module_id', FILTER_SANITIZE_NUMBER_INT);
        $module_id_to = filter_input(INPUT_POST, 'module_id_to', FILTER_SANITIZE_NUMBER_INT);
        $section_id = filter_input(INPUT_POST, 'section', FILTER_SANITIZE_NUMBER_INT);
        $course_id = filter_input(INPUT_POST, 'course_id', FILTER_SANITIZE_NUMBER_INT);

       $response = exec('"C:\xampp\moosh" -n activity-move -s '.$section_id.' '.$module_id.' ' . $module_id_to);
       // $response = exec('moosh activity-move 15942 ' );
        exec('"C:\xampp\moosh" -n cache-course-rebuild ' . $course_id);

        if ($response) {
            $data['data'] = array('response' => true, 'text' => $module_id.' Moved to '.$module_id_to);
        } else {
            $data['data'] = array('response' => false, 'text' => 'Problem Occured!');
        }
        echo json_encode($data);
        break;

    default:
        break;
}
