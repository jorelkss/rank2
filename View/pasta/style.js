$(document).ready(function () {

	function callLeft(){
        $('#leftdiv').load('table.php')
		$('.leftdiv').toggleClass('leftDiv');
        $('.rightdiv').toggleClass('rightDiv');
        $('#leftmove').off('click');
        $('#rightmove').on('click', callRight);
	}

	function callRight(){
        $('#rightdiv').load('show.php');
		$('.rightdiv').toggleClass('rightDiv');
        $('.leftdiv').toggleClass('leftDiv');
        $('#rightmove').off('click');
        $('#leftmove').on('click', callLeft);
	}
    
    $('#rightmove').on('click', callRight);

    $('#leftmove').off('click');

});