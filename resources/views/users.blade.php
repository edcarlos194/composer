<style>
    tr:nth-child(even) {
        background-color: #00fabb;
    }
    tr:nth-child(odd) {
        background-color: white;
    }
</style>
<h1>Usuários</h1>
<table>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach
</table>