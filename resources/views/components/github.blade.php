<div class="flex items-center justify-center">
    <span>GitHub</span>
    <i class="fa-brands fa-github-alt ms-3 me-1"></i>
    {{ trim(shell_exec('git rev-parse --abbrev-ref HEAD')) }}
</div>
