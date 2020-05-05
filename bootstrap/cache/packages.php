<?php return array (
  'api-skeleton/api-skeleton' => 
  array (
    'providers' => 
    array (
      0 => 'ApiSkeleton\\ApiSkeleton\\ApiSkeletonServiceProvider',
    ),
    'aliases' => 
    array (
      'Core' => 'App\\Modules\\Core\\Facades\\Core',
      'ErrorHandler' => 'App\\Modules\\Core\\Facades\\ErrorHandler',
      'CoreConfig' => 'App\\Modules\\Core\\Facades\\CoreConfig',
      'Logging' => 'App\\Modules\\Core\\Facades\\Logging',
      'Media' => 'App\\Modules\\Core\\Facades\\Media',
      'ApiConsumer' => 'App\\Modules\\Core\\Facades\\ApiConsumer',
    ),
  ),
  'benwilkins/laravel-fcm-notification' => 
  array (
    'providers' => 
    array (
      0 => 'Benwilkins\\FCM\\FcmNotificationServiceProvider',
    ),
  ),
  'caffeinated/modules' => 
  array (
    'providers' => 
    array (
      0 => 'Caffeinated\\Modules\\ModulesServiceProvider',
    ),
    'aliases' => 
    array (
      'Module' => 'Caffeinated\\Modules\\Facades\\Module',
    ),
  ),
  'facade/ignition' => 
  array (
    'providers' => 
    array (
      0 => 'Facade\\Ignition\\IgnitionServiceProvider',
    ),
    'aliases' => 
    array (
      'Flare' => 'Facade\\Ignition\\Facades\\Flare',
    ),
  ),
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'imliam/laravel-env-set-command' => 
  array (
    'providers' => 
    array (
      0 => 'ImLiam\\EnvironmentSetCommand\\EnvironmentSetCommandServiceProvider',
    ),
  ),
  'intervention/image' => 
  array (
    'providers' => 
    array (
      0 => 'Intervention\\Image\\ImageServiceProvider',
    ),
    'aliases' => 
    array (
      'Image' => 'Intervention\\Image\\Facades\\Image',
    ),
  ),
  'jackiedo/dotenv-editor' => 
  array (
    'providers' => 
    array (
      0 => 'Jackiedo\\DotenvEditor\\DotenvEditorServiceProvider',
    ),
    'aliases' => 
    array (
      'DotenvEditor' => 'Jackiedo\\DotenvEditor\\Facades\\DotenvEditor',
    ),
  ),
  'laravel/passport' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Passport\\PassportServiceProvider',
    ),
  ),
  'laravel/socialite' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Socialite\\SocialiteServiceProvider',
    ),
    'aliases' => 
    array (
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
    ),
  ),
  'laravel/telescope' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Telescope\\TelescopeServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'nunomaduro/collision' => 
  array (
    'providers' => 
    array (
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
);