# JellyFish

A browser-based **singing/karaoke practice tool**. It records your voice through the microphone (Web Audio API), lets you pick a song to sing along with (lyrics shown + backing track played), and optionally saves a WAV of your performance.

> **Copyright notice:** this project was built for personal educational use. The song/media files (`*.mp3`, `*.license.txt`) and lyrics included in this repo are **not** re-distributable and may violate copyright. Replace them with your own licensed/royalty-free tracks before sharing or deploying.

## Features

- **Mic recorder** — record, pause/resume, and stop; download your take as `.wav` right from the browser.
- **Song selection** — pick one of the songs configured in `index.php` to load lyrics + backing audio via `getsongs.php`.
- **Effects/clips** — optional background tracks via `getclips.php` (add your own royalty-free files).
- **User-land license tracking** — each track can carry a `N-license.txt` license file to track usage rights.

## Run it

JellyFish needs a small HTTP server so the PHP endpoints + audio files resolve on your browser page.

```bash
# PHP built-in server (simplest)
php -S localhost:8000
# open http://localhost:8000
```

Or deploy the folder to any Apache/nginx + PHP host.

> **Browsers only allow microphone capture on `localhost` or HTTPS** — use the local server above or add an HTTPS cert for remote access.

## How it works

| File               | Purpose                                            |
| ------------------ | -------------------------------------------------- |
| `index.php`        | UI: song + effect selectors, recorder controls     |
| `app.js`           | Recorder logic (record/pause/stop, WAV download)   |
| `recorder.js`      | Recorder library (makes WAV blobs)                 |
| `lib.js`           | AJAX helpers for song/effect requests              |
| `getsongs.php`     | Returns lyrics + `<audio>` for the chosen song     |
| `getclips.php`     | Returns an effect/background track                 |
| `upload.php`       | (optional) saves your recording to `uploads/`      |
| `main.js` / `sound_meter.js` | Optional input-level meter (unused by default) |

## Adding your own songs

1. Copy a royalty-free audio file into the repo (e.g. `7.mp3`).
2. Add a matching license note in `7-license.txt` (or delete the file if you own it).
3. Add an `<option value="7">…</option>` in `index.php` and a `case 7` block in `getsongs.php` with the lyrics.

## Privacy

Recording happens entirely in your browser (Web Audio). Nothing is uploaded unless you re-enable the `upload.php` flow in `app.js` — by default recordings are only downloadable to your own device.

## License

Code: MIT. **Media and lyrics are NOT licensed here** — see the notice at the top of this README.