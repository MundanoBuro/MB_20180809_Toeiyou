
<form>
    <ul class="form-style-1">
        <li class="row-2">
            <div class="col-2">
                <label>NOMBRES <span class="required">*</span></label>
                <input type="text" name="field1" class="field-divided"  />
            </div>
            <div class="col-2">
                <label>APELLIDOS <span class="required">*</span></label>
                <input type="text" name="field2" class="field-divided"  />
             </div>
        </li>
        <li>
            <label>EMAIL<span class="required">*</span></label>
            <input type="email" name="field3" class="field-long" />
        </li>
        {{--
        <li>
            <label>Subject</label>
            <select name="field4" class="field-select">
            <option value="Advertise">Advertise</option>
            <option value="Partnership">Partnership</option>
            <option value="General Question">General</option>
            </select>
        </li>
        --}}
        <li>
            <label>MENSAJE <span class="required">*</span></label>
            <textarea name="field5" id="field5" class="field-long field-textarea"></textarea>
        </li>
        <li class="checkbox">
            <label>He leído y accepto los términos y condiciones </label>
            <input type="checkbox" name="field3" class="field-long" />
            </li>
        <li>
            <input type="submit" value="Enviar" />
        </li>
    </ul>
</form>