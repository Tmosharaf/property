<form action="" method="GET" class="flex justify-between search-form">
    <div class="flex w-7/12 justify-between">
        <div class="single-search-field">
           @if (request('sale'))
               <label class="inputLabel" for="sale">Rent/Sale</label>
           @endif
            <select name="sale" id="sale" class="border-0">
                <option value="">Rent or Sale</option>
                <option {{ request('sale') ==1 ? 'selected="selected"' :'' }} value="1">Rent</option>
                <option {{ request('sale') ==2 ? 'selected="selected"' :'' }} value="2">Sale</option>
            </select>
        </div>
        <div class="search-field-border"></div>
        <div class="single-search-field">
            @if (request('type'))
            <label class="inputLabel" for="type">Type</label>
            @endif
            <select name="type" id="type" class="border-0">
                <option value="">Type</option>
                <option {{ request('type') == 'land' ? 'selected="selected"' :'' }} value="land">Land</option>
                <option {{ request('type') == 'appartment' ? 'selected="selected"' :'' }} value="appartment">Appartment</option>
                <option {{ request('type') == 'villa' ? 'selected="selected"' :'' }} value="villa">Villa</option>
            </select>
        </div>
        <div class="search-field-border"></div>
        <div class="single-search-field">
            @if (request('price'))
            <label class="inputLabel" for="price">Price</label>
            @endif
            <select name="price" id="price" class="border-0">
                <option value="">Price</option>
                <option {{ request('price') == '100000' ? 'selected="selected"' :'' }} value="100000">0 TL - 1,00,000 TL</option>
                <option {{ request('price') == '200000' ? 'selected="selected"' :'' }}  value="200000">1,00,000 TL - 2,00,000 TL</option>
                <option {{ request('price') == '300000' ? 'selected="selected"' :'' }}  value="300000">2,00,000 TL - 3,00,000 TL</option>
                <option {{ request('price') == '400000' ? 'selected="selected"' :'' }}  value="400000">3,00,000 TL - 4,00,000 TL</option>
                <option {{ request('price') == '500000' ? 'selected="selected"' :'' }}  value="500000">4,00,000 TL - 5,00,000 TL</option>
                <option {{ request('price') == '500001' ? 'selected="selected"' :'' }}  value="500001">5,00,000 TL<span class="font-serif">+</span></option>
            </select>
        </div>
        <div class="search-field-border"></div>
        <div class="single-search-field">
            @if (request('bedrooms'))
            <label class="inputLabel" for="bedrooms">Bedrooms</label>
            @endif
            <select name="bedrooms" id="bedrooms" class="border-0">
                <option value="">Bedrooms</option>
                @for ($i = 1; $i <= 5 ; $i++) <option {{ request('bedrooms') == $i ? 'selected="selected"' :'' }} value="{{ $i }}">{{ $i }} {{ request('bedrooms') !=1 ? 'bedrooms' :'bedroom' }}</option>
                    @endfor
            </select>
        </div>
    </div>
    <div class="flex justify-between items-center w-4/12 ml-5 search-submit">
        <input type="search" name="search_location" placeholder="Search by Locationn"
            class="rounded-lg px-4 py-2 w-full mr-4">
        <button type="submit" class="btn">Search</button>
    </div>
</form>
