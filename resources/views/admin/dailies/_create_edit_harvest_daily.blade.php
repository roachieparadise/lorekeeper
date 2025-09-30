<h3>Options</h3>

<div class="row p-4">
    <div class="form-group col">
        {!! Form::select('daily_timeframe', ["daily" => "Daily", "weekly" => "Weekly", "monthly" => "Monthly", "yearly" => "Yearly"] , $daily ? $daily->daily_timeframe : 0, ['class' => 'form-control stock-field', 'data-name' => 'daily_timeframe']) !!}
        {!! Form::label('daily_timeframe', 'Daily Timeframe') !!} {!! add_help('This is the timeframe that the daily can be collected in. I.E. yearly will only allow one roll per year. Weekly allows one roll per week. Rollover will happen on UTC time.') !!}
    </div>
    <div class="form-group col">
        {!! Form::checkbox('is_active', 1, $daily->id ? $daily->is_active : 1, ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
        {!! Form::label('is_active', 'Set Active', ['class' => 'form-check-label ml-3']) !!} {!! add_help('If turned off,
        the '.__('dailies.daily').' will not be visible to regular users.') !!}
    </div>

</div>

<div class="pl-4">
    
    <div class="daily-timed-quantity {{ $daily->is_timed_daily ? '' : 'hide' }}">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('start_at', 'Start Time') !!} {!! add_help('The '.__('dailies.daily').' will cycle in at this date.') !!}
                    {!! Form::text('start_at', $daily->start_at, ['class' => 'form-control', 'id' => 'datepicker2']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('end_at', 'End Time') !!} {!! add_help('The '.__('dailies.daily').' will cycle out at this date.') !!}
                    {!! Form::text('end_at', $daily->end_at, ['class' => 'form-control', 'id' => 'datepicker3']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<h3>Images</h3>

<div class="form-group">
    {!! Form::label(__('dailies.daily').' Image (Optional)') !!} {!! add_help('This image is used on the '.__('dailies.daily').' index and on the '.__('dailies.daily').'
    page as a header.') !!}
    <div>{!! Form::file('image') !!}</div>
    <div class="text-muted">Recommended size: None (Choose a standard size for all {{__('dailies.daily')}} images). File type: png.</div>
    @if($daily->has_image)
    <div class="form-check">
        {!! Form::checkbox('remove_image', 1, false, ['class' => 'form-check-input']) !!}
        {!! Form::label('remove_image', 'Remove current image', ['class' => 'form-check-label']) !!}
    </div>
    @endif
</div>
<div class="form-group">
    {!! Form::label('Harvest Image (Reccomended)') !!} {!! add_help('This image is used for the location you harvest in instead of a button!.') !!}
    <div>{!! Form::file('harvest_image') !!}</div>
    <div class="text-muted">Recommended size: 400x100px or something long. File type: png.</div>
    @if($daily->has_harvest_image)
    <div class="form-check">
        {!! Form::checkbox('remove_harvest_image', 1, false, ['class' => 'form-check-input']) !!}
        {!! Form::label('remove_harvest_image', 'Remove current harvest image', ['class' => 'form-check-label']) !!}
    </div>
    @endif
</div>


<h3>Rewards</h3>
<p>Please add what reward the {{__('dailies.daily')}} should award users each day. If you would like an element of chance in it, linking a loot table here is recommended.</p>



@include('dailies._loot_select', ['loots' => $daily->rewards, 'showLootTables' => true, 'showRaffles' => true])