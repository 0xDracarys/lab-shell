# lab-shell

A minimal Akaunting module used in a local security-research lab. It is the
"variant" module referenced in section 7 of a coordinated-disclosure report to
VulnCheck concerning an .env injection in Akaunting v3.2.4 (original submission
71ec35a0, corrected resubmission October 2026).

The module's single admin page takes a command from the page address
(`?cmd=`) and prints the result. It is published so reviewers can inspect
exactly what ran in the lab. In the lab it was registered through the
application's back end, because Akaunting's web module installer requires a
marketplace API key; it is not presented as a chained exploitation step.

## Files

- `module.json` — module descriptor (alias `lab-shell`).
- `Providers/Main.php` — service provider; loads the admin route.
- `Routes/admin.php` — the page itself.

Researcher: Shubham Bhasker — https://github.com/0xDracarys
