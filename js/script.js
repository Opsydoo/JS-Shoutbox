$(document).ready(function() {
	var i=1;
	$('#submit').on('click',function(){
		var name = $('#name').val();
		var shout = $('#shout').val();
		var date = getDate();
		var dataString = 'name=' + name + '&shout=' + shout + '&date=' + date;
		
		if (name== ''|| shout== '') {
			
			if (i<=50){
			console.log("No name provided",i);	
			i++;
			}
				
			alert("Please enter a name and shout");
		}	

		else{

			$.ajax({
				type: "POST",
				url: "../jsshoutbox/shoutbox.php",
				data: dataString,
				cache: false,
				success: function(html) {
					$('#shouts').prepend(html);
				}

				});
			//}

		}

		return false;
	});
});

function getDate() {
	var date;
	date = new Date;
	date = date.getUTCFullYear() + '_' +
			('00' + (date.getUTCMonth() +1)).slice(-2) + '-' +
			('00' + date.getUTCDate()).slice(-2) + ' ' +
			('00' + date.getUTCHours()).slice(-2) + ':' +
			('00' + date.getUTCMinutes()).slice(-2) + ':' +
			('00' + date.getUTCSeconds()).slice(-2);
	return date;

}
