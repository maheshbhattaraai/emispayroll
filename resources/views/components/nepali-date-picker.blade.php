<div class="col-sm-12 col-md-3 col-lg-3">
    <div class="form-group">
        <label for="description">Birth Date Nepali:</label>
        <input type="text" id="nepali-datepicker" class="nepali-datepicker form-control" value=""/>
        @error('birth_date_nepali') <span class="error">{{ $message }}</span> @enderror
    </div>
</div>
