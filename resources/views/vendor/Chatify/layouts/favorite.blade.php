<div class="favorite-list-item">
  @if ($user)
    <div data-id="{{ $user->id }}" data-action="0" class="avatar av-m"
      style="background-image: url('/assets/images/account_avatar/{{ $user->avatar_profil ?? 'default_user.png' }}');">
    </div>
    <p>{{ strlen($user->name) > 5 ? substr($user->name, 0, 6) . '..' : $user->name }}</p>
  @endif
</div>
