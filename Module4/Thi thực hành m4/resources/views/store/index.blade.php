<main class="page-content">
    <div class="container">
        <a href="{{ route('books.create') }}" class="btn btn-primary">Add new</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class='w-5'>ID</th>
                    <th scope="col">Tên sách</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Tác giả</th>
                    <th scope="col">Thể loại</th>
                    <th scope="col">Số trang</th>
                    <th scope="col">Năm xuất bản</th>
                    <th adta-breakpoints="xs">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $key => $book)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->ISBN }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->category }}</td>
                        <td>{{ $book->number_of_pages }}</td>
                        <td>{{ $book->publishing_year }}</td>
                        <td>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa ?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="card-footer">
            <nav class="float-right">
                {{ $books->appends(request()->query())->links('pagination::bootstrap-4') }}
            </nav>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">