$(document).ready(function() {
	// Load chat messages on page load
	updateChat();

	// Poll server for new messages every 2 seconds
	setInterval(function() {
		updateChat();
	}, 2000);

	// Send message when "Send" button is clicked
	$("#send").click(function() {
		var message = $("#message").val();
		if(message != "") {
			$.ajax({
				type: "POST",
				url: "https://ratcult.repl.co/php/send_receive_messages.php",
				data: { message: message },
				success: function() {
					$("#message").val("");
					updateChat();
				}
			});
		}
	});
});

function updateChat() {
	$.ajax({
		type: "GET",
		url: "https://ratcult.repl.co/php/send_receive_messages.php",
		success: function(data) {
			$("#chatbox").html(data);
		}
	});
}
console.clear();