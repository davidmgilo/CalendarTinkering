<template>
    <div>
        <calendar-events></calendar-events>

        <calendar></calendar>
    </div>
</template>

<script>
    import Calendar from 'Calendar.vue'
    import CalendarEvents from 'CalendarEvents.vue'
    export default {
        components:[Calendar, CalendarEvents],
        mounted() {
            console.log('Component Full Calendar mounted.')
        }
    }
</script>
