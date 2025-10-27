// Detecta a preferência inicial (localStorage ou sistema)
if (localStorage.theme === 'dark' ||
    (!('theme' in localStorage) &&
        window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}

// Funções para alternar o tema
window.setTheme = function (theme) {
    if (theme === 'dark') {
        document.documentElement.classList.add('dark');
        localStorage.theme = 'dark';
    } else if (theme === 'light') {
        document.documentElement.classList.remove('dark');
        localStorage.theme = 'light';
    } else {
        // Remove para seguir preferência do sistema
        document.documentElement.classList.remove('dark');
        localStorage.removeItem('theme');
    }
}

// Toggle simples entre light e dark
window.toggleTheme = function () {
    if (document.documentElement.classList.contains('dark')) {
        setTheme('light');
    } else {
        setTheme('dark');
    }
}