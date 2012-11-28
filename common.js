var photo_id = 0;
var photo_all = 0;

function show() {
	$("#top").slideDown('slow', function() {});
}

function hide() {
	$("#top").slideUp('slow', function() {});
}

function init() {
	$("#content").html("Loading...");
	$("#content").load("/all.php");
}

function next_photo() {
	var id = photo_id;
	if(id==photo_all)
	{
		id=1;
	}
	else
	{
		id++;
	}
	showPhoto(id);
}

function showPhoto(id) {
	photo_id = id;
	$("#current").html(id);
	$("#all").load("/count.php");
	photo_all = document.getElementById("all").innerHTML;
	$("#photo_title").load("/load.php?act=title&id="+id);

	$.getJSON('/load.php?id='+id, function(data) {
		$("#big_img").attr("src", data.path);
	});

	$("#viewer_bg").slideDown('fast', function() {});
	$("#viewer_top").slideDown('fast', function() {});
}

function closePhoto() {
	$("#viewer_bg").slideUp('fast', function() {});
	$("#viewer_top").slideUp('fast', function() {});
	photo_id = 0;
}