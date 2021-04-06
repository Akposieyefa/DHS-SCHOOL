<div class="navbar navbar-expand-lg navbar-light">
    <div class="text-center d-lg-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            More Links
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; {{ date('Y') }}. <a href="#">{{ Qs::getSystemName() }}</a>
					</span>

        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item"><a href="{{ route('privacy_policy') }}" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Privacy Policy</a></li>
        </ul>
    </div>
</div>
