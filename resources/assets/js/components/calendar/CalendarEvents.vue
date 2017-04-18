<template>
            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Esdeveniments</h3>
                </div>
                <div class="box-body">
                    <div id='external-events'>
                        <div class='fc-event'>My Event 1</div>
                        <div class='fc-event'>My Event 2</div>
                        <div class='fc-event'>My Event 3</div>
                        <div class='fc-event'>My Event 4</div>
                        <div class='fc-event'>My Event 5</div>
                        <p>
                            <input type='checkbox' id='drop-remove' />
                            <label for='drop-remove'>remove after drop</label>
                        </p>
                    </div>
                </div>
            </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component CalendarEvents mounted.')
        }
    }
</script>
