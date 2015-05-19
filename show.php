<?php
$chat = json_decode(file_get_contents('chat.txt'), true);
$chat = is_null($chat) ? [] : $chat;
?>

<?php if (! empty($chat)): ?>
	<?php foreach ($chat as $talk): ?>
		<p>
			[<?php echo $talk['when'] ?>] <strong><?php echo $talk['user'] ?></strong>: <?php echo $talk['message'] ?>
		</p>
	<?php endforeach ?>
<?php endif ?>