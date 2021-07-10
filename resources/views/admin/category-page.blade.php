@extends('admin.home')

@section('main')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('admin.projects.create', ['category' => $category]) }}" type="button" class="btn btn-primary mb-3">Добавить проект</a>
            <a href="{{ route('admin.meta.edit', ['metum' => $category]) }}" type="button" class="btn btn-secondary mb-3">Редактировать мета данные категории</a>
            <br>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Описание</th>
                        <th scope="col"></th>
                        <th scope="col">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <td>{!! $project->name ?? "<i>Отсутствует</i>" !!}</td>
                            <td>{!! $project->description ? mb_substr($project->description, 0, 50) . '...' : "<i>Отсутствует</i>" !!}</td>
                            <td><img src="{{ $project->getMedia('primaryImage')[0]->getUrl() }}" width="120"></td>
                            <td>
                                <a href="{{ route('admin.projects.edit', ['category' => $category, 'project' => $project->id]) }}" type="button" class="btn btn-success mb-3">Редактировать</a>
                                <a href="{{ route('admin.projects.delete', ['category' => $category, 'id' => $project->id]) }}"
                                   type="button"
                                   class="btn btn-danger mb-3"
                                   onclick="return confirm('Уверены, что хотите удалить проект?');">
                                    Удалить
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
