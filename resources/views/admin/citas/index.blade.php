@extends('admin.template.main')

@section('content')

<div id='calendar'></div>

<meta charset='utf-8' />
<link href='{{ asset('plugins/fullcalendar/fullcalendar.css') }}' rel='stylesheet' />
<link href='{{ asset('plugins/fullcalendar/fullcalendar.print.css') }}' rel='stylesheet' media='print' />
<script src='{{ asset('plugins/fullcalendar/moment.min.js') }}'></script>
{!!Html::script('plugins/bootstrap/js/jquery.min.js')!!}
<script src='{{ asset('plugins/fullcalendar/fullcalendar.min.js') }}'></script>
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listMonth'
			},
			defaultDate: '2016-09-12',
			navLinks: true, // can click day/week names to navigate views
			businessHours: true, // display business hours
			editable: true,
			events: [

        <?php foreach($citas as $agend):

                $inicio = explode(" ", $agend['fecha']);
                if($inicio[1] == '00:00:00'){
                    $inicio = $inicio[0];
                }else{
                    $inicio = $agend['fecha'];

                }
                 ?>
                {
                  start: '<?php echo $inicio; ?>',

                  overlap: false,


                },
            <?php endforeach; ?>

            ]
		});
		
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
@endsection

