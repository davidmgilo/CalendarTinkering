<template>
            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Calendari</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <div id="calendar"></div>

                </div>
                <!-- /.box-body -->
            </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component Calendar mounted.')
        }
    }
</script>
