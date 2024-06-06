$(document).ready(function() {
	// Load chat messages on page load
	updateChat();

	// Poll server for new messages every 2 seconds
	setInterval(function() {
		updateChat();
	}, 2000);

	// Send message when "Send" button is clicked
	$("#send").click(function() {
		event.preventDefault();
		var message = $("#message").val();
		if(message != "") {
			$.ajax({
				type: "POST",
				url: "/php/send_receive_messages.php",
				data: { message: message },
				success: function() {
					$("#message").val("");
					updateChat();
				}
			});
		}
	});

	$("#send2").submit(function() {
		event.preventDefault();
		var message = $("#message").val();
		if(message != "") {
			$.ajax({
				type: "POST",
				url: "/php/send_receive_messages.php",
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
    // Make a GET request to the server
    $.ajax({
        type: "GET",
        url: "/php/send_receive_messages.php",
        success: function(data) {
            // Add the new messages to the chatbox
            $("#chatbox").html(data);
            // Scroll the chatbox to the bottom to show the latest messages
            $("#chatbox-container").scrollTop($("#chatbox")[0].scrollHeight);
        }
    });
}