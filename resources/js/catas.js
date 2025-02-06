document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        initialDate: '2025-02-01',
        firstDay: 1,
        locale: 'es',
        events: [
            
        ],
        eventMouseEnter: function(info) {
            var tooltip = document.createElement('div');
            tooltip.className = 'tooltip';
            tooltip.innerHTML = info.event.title;
            document.body.appendChild(tooltip);

            tooltip.style.left = info.jsEvent.pageX + 'px';
            tooltip.style.top = info.jsEvent.pageY + 'px';

            info.el.addEventListener('mouseleave', function() {
                tooltip.remove();
            });
        }
    });
    calendar.render();
});
