<template>
    <div >
        
        <FullCalendar :options="calendarOptions" />
    </div>
</template>
<script>
    import FullCalendar from '@fullcalendar/vue3'
    import dayGridPlugin from '@fullcalendar/daygrid'
    import timeGridPlugin from '@fullcalendar/timegrid'
    import interactionPlugin from '@fullcalendar/interaction'

    export default {
        components: {
          FullCalendar
        }, 
        data() {
            return {
                calendarOptions: {
                    headerToolbar: {
                      left: 'prev, next today',
                      center: 'title',
                      right: 'dayGridMonth, timeGridWeek, timeGridDay'
                    },
                    plugins: [ dayGridPlugin, timeGridPlugin, interactionPlugin ],
                    initialView: 'dayGridMonth',
                    showNonCurrentDates: false,
                    editable: false,
                    selectable: true,
                    height: 600,
                    slotDuration: '00:30',
                    allDaySlot: false,
                    views: {
                      dayGrid: {
                         dayMaxEventRows: 3
                      }
                    },
                    eventTimeFormat: {
                      hour: '2-digit',
                      minute: '2-digit',
                      meridiem: true
                    },
                    events: [],
                    eventColor:'#FF69B4'
                }
            }
        },
        created() {
            this.getEvents();
        },
        methods: {
            getEvents() {
              axios.get('http://127.0.0.1:8000/api/show-events')
                  .then(response => {
                      this.calendarOptions.events = response.data.events;
                  });
            }
        }
    }
</script>
<style type="text/css">
    .fc-widget-header{
    background-color:red;
}
.fc-button {
    background-color: red;
}
</style>