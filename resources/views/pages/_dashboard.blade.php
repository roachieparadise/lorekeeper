<h1>Welcome, {!! Auth::user()->displayName !!}!</h1>

    <span class="badge badge-pill badge-success mb-3 p-2" style="height:40px;font-size:18px">
        <i class="far fa-clock"></i> {!! format_date(Carbon\Carbon::now()) !!}
    </span>
    <span class="badge badge-pill badge-success mb-3 p-2" style="height:40px;font-size:18px">
        To-Do: <a href="{{ url('dailies') }}">Dailies</a>, <a href="{{ url('prompts/prompts') }}">Prompts</a>, <a href="{{ url('dailies/6') }}">Event</a>
    </span>
    <h5 class="text-center">Profile</h5>
<div class="row bg-dark p-4 mb-2" style="border-width: 3px !important;border: 3px solid #00fb08ff;border-radius:40px">

    <div class="col-md-6">
        <div class="card mb-4" style="border-radius:40px">
            <div class="card-body text-center">
                
            </div>
            <ul class="list-group list-group-flush" style="border-radius:0px 0px 40px 40px">
                <li class="list-group-item"><a href="{{ Auth::user()->url }}">Profile</a></li>
                <li class="list-group-item"><a href="{{ url('account/settings') }}">User Settings</a></li>
                <li class="list-group-item"><a href="{{ url('trades/open') }}">Trades</a></li>
                <li class="list-group-item"><a href="{{ url('characters/transfers/incoming') }}">Character Transfers</a></li>
                <li class="list-group-item"><a href="{{ url('characters') }}">My Characters</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-sm">
            <span class="badge badge-pill badge-success my-3 p-2" style="height:40px;font-size:18px"> <a href="{{ url('info/guide') }}">Guides</a> </span>
            <span class="badge badge-pill badge-success my-3 p-2" style="height:40px;font-size:18px"> <a href="{{ url('character-creator') }}">Dollmaker </a></span>
            <span class="badge badge-pill badge-success my-3 p-2" style="height:40px;font-size:18px"> <a href="https://discord.gg/wPkQt7WjgT">Discord</a> </span>
            </div>
            </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-4 " style="border-radius:40px">
            <div class="card-body text-center">
                <img src="{{ asset('images/characters.png') }}" alt="Characters" /> <img src="{{ asset('images/account.png') }}" alt="Account" />
            </div>
        </div>
    </div>
</div>
<h5 class="text-center">Inventory</h5>
<div class="row bg-dark p-4" style="border-width: 3px !important;border: 3px solid #00fb08ff;border-radius:40px">
    <div class="col-md-6">
        <div class="card" style="border-radius:40px">
            <div class="card-body text-center">
                <img src="{{ asset('images/inventory.png') }}" alt="Inventory" /> <img src="{{ asset('images/currency.png') }}" alt="Bank" />
                
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card" style="border-radius:40px">
            <ul class="list-group list-group-flush" style="border-radius:40px">
                <li class="list-group-item"><a href="{{ url('characters/myos') }}">My MYO Slots</a></li>
                <li class="list-group-item"><a href="{{ url('bank') }}">Bank</a></li>
                <li class="list-group-item"><a href="{{ url('inventory') }}">My Inventory</a></li>
                <li class="list-group-item"><a href="{{ Auth::user()->url . '/item-logs' }}">Item Logs</a></li>
                <li class="list-group-item"><a href="{{ Auth::user()->url . '/currency-logs' }}">Currency Logs</a></li>
            </ul>
        </div>
        
    </div>
</div>
