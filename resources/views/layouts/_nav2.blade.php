<nav class="navbar navbar-expand-lg navbar-light bg-success" style="border-width: 3px !important;border-bottom: 3px solid #00fb08ff;border-radius:35px 35px 0px 0px;background-color:#000000 !important">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav m-auto">
      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('info/about') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            About
                        </a>
                        <div class="dropdown-menu" aria-labelledby="inventoryDropdown">
                            <a class="dropdown-item" href="{{ url('info/about') }}">
                                Info
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('world/species') }}">
                                Species
                            </a>
                            <a class="dropdown-item" href="{{ url('world/rarities') }}">
                                Rarities
                            </a>
                            <a class="dropdown-item" href="{{ url('world/traits') }}">
                                Traits
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('info/guide') }}">
                                Guide
                            </a>
                        </div>

                    </li>
      <li class="nav-item dropdown">
                    <a id="loreDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        World
                    </a>

                    <div class="dropdown-menu" aria-labelledby="loreDropdown">
                        <a class="dropdown-item" href="{{ url('world') }}">
                            Encyclopedia
                        </a>
                        <a class="dropdown-item" href="{{ url('info/bugs') }}">
                            Bugs
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('world/info') }}">
                            The World
                        </a>
                        <div class="dropdown-divider"></div>
                        
                    </div>
                </li>
      <li class="nav-item dropdown">
                    <a id="loreDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Activities
                    </a>

                    <div class="dropdown-menu" aria-labelledby="loreDropdown">
                        <a class="dropdown-item" href="{{ url('prompts/prompts') }}">
                            Prompts
                        </a>
                        <a class="dropdown-item" href="{{ url('shops') }}">
                            Shops
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url(__('dailies.dailies')) }}">
                        {{__('dailies.dailies')}}
                        </a>
                        <a class="dropdown-item" href="{{ url('encounter') }}">
                            Encounters
                        </a>
                        <a class="dropdown-item" href="{{ url('crafting') }}">
                                Crafting
                        </a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('character-creator') }}">
                               Character Creators
                            </a>
                        
                    </div>
                </li>
    </ul>
  </div>
</nav>
