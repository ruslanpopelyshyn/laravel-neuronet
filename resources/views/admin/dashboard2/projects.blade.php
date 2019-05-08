<div class="box box-purple">
  <div class="box-header with-border">
    <h3 class="box-title">Projects</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <ul class="products-list product-list-in-box">

      @foreach($projects as $project)
        <li class="item">
          <div class="product-img">
            <img src="{{ $project->logo }}" alt="{{ $project->name }}">
          </div>
          <div class="product-info">
            <a href="/admin/projects/{{ $project->id }}" class="product-title">{{ $project->name }}
            <span class="product-description">
                  {{ $project->description }}
            </span>
          </div>
        </li>
        <!-- /.item -->
      @endforeach

    </ul>
  </div>
  <!-- /.box-body -->
  <div class="box-footer text-center">
    <a href="{{ url('admin/projects') }}" class="uppercase">View All Products</a>
  </div>
  <!-- /.box-footer -->
</div>