<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><!DOCTYPE html>
<html>
<head>
    <title>Laravel FullCalendar</title>
    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>
<body>

<div id="calendar"></div>

<!-- FullCalendar JS (Global Build) -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let calendarEl = document.getElementById('calendar');

        let calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            editable: true,
            selectable: true,
            events: '/events',
            
            dateClick: function (info) {
                let title = prompt('Enter Event Title:');
                if (title) {
                    $.ajax({
                        url: '/events',
                        method: 'POST',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            title: title,
                            start: info.dateStr,
                            end: info.dateStr
                        },
                        success: function (event) {
                            calendar.addEvent(event); // Instantly add to UI
                            alert('Event added');
                        },
                        error: function () {
                            alert('Failed to add event');
                        }
                    });
                }
            },

            eventDrop: function (info) {
                updateEvent(info.event);
            },
            eventResize: function (info) {
                updateEvent(info.event);
            },
			eventClick: function (info){
				editEvent(info);
			}
        });

        calendar.render();

        function updateEvent(event) {
            $.ajax({
                url: `/events/${event.id}`,
                method: 'PUT',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    title: event.title,
                    start: event.start.toISOString(),
                    end: event.end ? event.end.toISOString() : null
                },
                success: function () {
                    alert('Event updated');
                },
                error: function () {
                    alert('Failed to update event');
                }
            });
        }
		
        function editEvent(info) {
            let newTitle = prompt('Edit Event Title:', info.event.title);
			if (newTitle) {
				$.ajax({
					url: `/events/${info.event.id}`,
					method: 'PUT',
					data: {
						_token: $('meta[name="csrf-token"]').attr('content'),
						title: newTitle,
						start: info.event.start.toISOString(),
						end: info.event.end ? info.event.end.toISOString() : null
					},
					success: function () {
						info.event.setProp('title', newTitle); // 👈 update title in UI
						alert('Event title updated');
					},
					error: function () {
						alert('Failed to update title');
					}
				});
			}
        }
    });
</script>


</body>
</html>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\laravelapps\task-manager\resources\views/calendar.blade.php ENDPATH**/ ?>