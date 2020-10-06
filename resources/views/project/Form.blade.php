<form action = "{{ route('formInfo')}}" method="POST">
    @csrf
    Capacity of Bus: <input type="number" name="Cb" min = "0">
    Occupied seats: <input type="number" name="Os" min = "0">
    Waiting Passengers: <input type="number" name="Wp" min = "0">
    <input type="submit" value="submit">

</form>