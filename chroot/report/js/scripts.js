//
// GetFoundFirst.com Reporting Engine
// Copyright 2013 ndisp.com and getfoundfirst.com
//
// This application is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public
// License as published by the Free Software Foundation; either
// version 3 of the License, or (at your option) any later version.
//
// This library is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
// General Public License for more details.
//
// You should have received a copy of the GNU General Public
// License along with this code; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//

var slideNum = 1;

$('document').ready(function() {
	$(".slideNum").html(1);
	$('#next').click(function() {
		if (slideNum == 1) {
			$('#slideNum2').addClass('topslide2');
			$(".slideNum").html(2);
		} else if (slideNum == 2) {
			$('#slideNum3').addClass('topslide3');
			$(".slideNum").html(3);
		} else if (slideNum == 3) {
			$('#slideNum4').addClass('topslide4');
			$(".slideNum").html(4);
		} else if (slideNum == 4) {
			$('#slideNum5').addClass('topslide5');
			$(".slideNum").html(5);
		} else if (slideNum == 5) {
			$('#slideNum6').addClass('topslide6');
			$(".slideNum").html(6);
		} else if (slideNum == 6) {
			$('#slideNum7').addClass('topslide7');
			$(".slideNum").html(7);
		} else if (slideNum == 7) {
			$('#slideNum8').addClass('topslide8');
			$(".slideNum").html(8);
		} else if (slideNum == 8) {
			$('#slideNum9').addClass('topslide9');
			$(".slideNum").html(9);
		} else if (slideNum == 9) {
			$('#slideNum10').addClass('topslide10');
			$(".slideNum").html(10);
		} else if (slideNum == 10) {
			$('#slideNum11').addClass('topslide11');
			$(".slideNum").html(11);
		} else if (slideNum == 11) {
			$('#slideNum12').addClass('topslide12');
			$(".slideNum").html(12);
		} else if (slideNum == 12) {
			$('#slideNum13').addClass('topslide13');
			$(".slideNum").html(13);
		} else if (slideNum == 13) {
			$('#slideNum14').addClass('topslide14');
			$(".slideNum").html(14);
		} else if (slideNum == 14) {
			$('#slideNum15').addClass('topslide15');
			$(".slideNum").html(15);
		} else if (slideNum == 15) {
			$('#slideNum16').addClass('topslide16');
			$(".slideNum").html(16);
		}
		slideNum = slideNum + 1;
		if (slideNum > 16) {
			slideNum = 16;
		}
	});
});

$('document').ready(function() {
	$('#prev').click(function() {
		if (slideNum == 2) {
			$('#slideNum2').removeClass('topslide2');
			$(".slideNum").html(1);
		} else if (slideNum == 3) {
			$('#slideNum3').removeClass('topslide3');
			$(".slideNum").html(2);
		} else if (slideNum == 4) {
			$('#slideNum4').removeClass('topslide4');
			$(".slideNum").html(3);
		} else if (slideNum == 5) {
			$('#slideNum5').removeClass('topslide5');
			$(".slideNum").html(4);
		} else if (slideNum == 6) {
			$('#slideNum6').removeClass('topslide6');
			$(".slideNum").html(5);
		} else if (slideNum == 7) {
			$('#slideNum7').removeClass('topslide7');
			$(".slideNum").html(6);
		} else if (slideNum == 8) {
			$('#slideNum8').removeClass('topslide8');
			$(".slideNum").html(7);
		} else if (slideNum == 9) {
			$('#slideNum9').removeClass('topslide9');
			$(".slideNum").html(8);
		} else if (slideNum == 10) {
			$('#slideNum10').removeClass('topslide10');
			$(".slideNum").html(9);
		} else if (slideNum == 11) {
			$('#slideNum11').removeClass('topslide11');
			$(".slideNum").html(10);
		} else if (slideNum == 12) {
			$('#slideNum12').removeClass('topslide12');
			$(".slideNum").html(11);
		} else if (slideNum == 13) {
			$('#slideNum13').removeClass('topslide13');
			$(".slideNum").html(12);
		} else if (slideNum == 14) {
			$('#slideNum14').removeClass('topslide14');
			$(".slideNum").html(13);
		} else if (slideNum == 15) {
			$('#slideNum15').removeClass('topslide15');
			$(".slideNum").html(14);
		} else if (slideNum == 16) {
			$('#slideNum16').removeClass('topslide16');
			$(".slideNum").html(15);
		}
		slideNum = slideNum - 1;
		
	});
});
