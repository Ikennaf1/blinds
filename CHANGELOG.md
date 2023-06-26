# Change Log

## [v0.6.3] - 2023-06-26
### Fixed
- Hook: `useDefaultIcons` - Fixed unpredective behavior of the icons by adding useDefaultIcons hook

## [v0.6.2] - 2023-05-24
### Fixed
- Hook: `activateDarkMode`

## [v0.6.0] - 2023-05-24
### Changed
- Hooks: `setOnToggle`, `setOnToggleDark`, `setOnToggleNormal` now `onToggle`, `onToggleDark`, `onToggleNormal`

## [v0.5.2] - 2023-05-02
### Added
- New hook: `setOnToggleDark`, `setOnToggleNormal`

## [v0.5.1] - 2023-05-02
### Added
- New hook: `setOnToggle`

## [v0.4.1] - 2023-05-02
### Added
- Users can now set the `id` for the generated style tag, and the `id` for the toggle icons.
- Users can now set the name or key for the generated cookie, or for the local storage.
- Users can now choose between cookie based storage, or local based storage (local storage is still default).

## [v0.4.0] - 2023-05-02
### Added
- Ability to store with local storage, in addition to cookie based storage.
- Local storage is now default storage option.

## [v0.3.2] - 2023-05-01
### Changed
- Abstracted away the storage functions so more storage types can be possible.

## [v0.3.1] - 2023-04-30
### Changed
- Default `id` for icons in the DOM is now `blinds_id`.
- Default `id` for the dark mode `style` tag is now `blinds_style_id`.
- Removed the unnecessary blinds_settings.json file.

## [v0.3.0] - 2023-04-17
### Added
- Hurray! First stable version released!
