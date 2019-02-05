<tr>
    <!-- タスク名 -->
    <td class="table-text">
        <div>{{ $task->name }}</div>
    </td>

    <!-- 削除ボタン -->
    <td>
        <form action="/task/{{ $task->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button>タスク削除</button>
        </form>
    </td>
</tr>
