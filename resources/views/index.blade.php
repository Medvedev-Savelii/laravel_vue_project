@extends('layouts.app')

@section('content')
    <Index></Index>
@endsection


<script>
    import Index from "../js/components/index.js";
    export default {
        components: {Index}
    }
</script>
