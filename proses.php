<?php
if ($_POST and ! empty($_POST['message'])) {
	$chat = json_decode(file_get_contents('chat.txt'), true);
	$chat = is_null($chat) ? [] : $chat;
	$new_message = array(
		'user' => $_POST['user'],
		'message' => $_POST['message'],
		'when' => (new DateTime)->format('Y-m-d H:i:s')
	);
	array_push($chat, $new_message);
	$result = json_encode($chat);
	file_put_contents('chat.txt', $result);

	echo $result;
}
?>