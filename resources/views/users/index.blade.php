<select id="mySelect" style="width: 200px;">
    <option value="AL">Alabama</option>
    <option value="CA">California</option>
    <option value="NY">New York</option>
    <option value="TX">Texas</option>
    <!-- Add more options as needed -->
</select>

<script>
    $(document).ready(function () {
        $('#mySelect').select2({
            placeholder: "Select a state",
            allowClear: true
        });
    });
</script>