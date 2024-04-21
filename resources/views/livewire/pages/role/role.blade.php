<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <table id="datatest" class="display" style="width:100%">
                        <thead>
                            <th>Name</th><th>created at</th><th>modified at</th>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr style="text-align:center">
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->created_at }}</td>
                                <td>{{ $role->updated_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <th>Name</th><th>created at</th><th>modified at</th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="module" >
        $(document).ready(function() {
            let table = new DataTable('#datatest', {
                select:true
            });
        });
   </script>
    @pushOnce('scripts')
        <script type="module" >
            $(document).ready(function() {
                let table = new DataTable('#datatest', {});
            });
       </script>
    @endpushOnce
</x-app-layout>
