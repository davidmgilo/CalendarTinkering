@extends('adminlte::page')

@section('htmlheader_title')
	Exemple calendari
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">

            <div class="col-md-3">

                <div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Esdeveniments</h3>
                    </div>
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

			<div class="col-md-9">

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

			</div>
		</div>
	</div>
@endsection
