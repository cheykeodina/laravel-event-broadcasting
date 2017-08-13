@extends('layouts.app')

@section('content')
    <home  :user="{{ $user }}"inline-template>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Create New Laravel Task</div>

                        <div class="panel-body">
                            <form class="form-horizontal" role="form" @submit.prevent="create">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="name" v-model="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" v-if="tasks.length > 0">
                <table class="table">
                    <tr v-for="task in tasks">
                        <td>@{{ task.name }}</td>
                        <td><a href="#" class="btn btn-danger btn-sm">Delete</a> </td>
                    </tr>
                </table>
            </div>
        </div>
    </home>
@endsection
