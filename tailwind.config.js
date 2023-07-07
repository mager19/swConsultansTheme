const plugin = require("tailwindcss/plugin");

module.exports = {
    content: [
        "./*.php",
        "./*/*.php",
        "./assets/**/*.js",
        "./blocks/**/*.{php,js}",
    ],

    theme: {
        extend: {
            colors: {
                dark: {
                    1: "#031b4c",
                    2: "#2b426f",
                    3: "#4f658f",
                },
                light: {
                    1: "#f6f9fd",
                    2: "#e7ebf3",
                    3: "#92a8d1",
                },
                primary: {
                    DEFAULT: "#CD049A",
                    light: "#FF6560",
                    lighter: "#F19898",
                },
                secondary: {
                    DEFAULT: "#670067",
                    dark: "#A91662",
                    light: "#D94956",
                },
                grey: {
                    50: "#F9FAFB",
                    100: "#F2F4F7",
                    200: "#E4E7EC",
                    300: "#D0D5DD",
                    400: "#98A2B3",
                    500: "#667085",
                    600: "#475467",
                    700: "#344054",
                    800: "#1D2939",
                    900: "#101828",
                },
                alternate: "#008DE7",
                black: "#000",
                white: "#fff",
            },

            spacing: {
                13: "3.25rem",
                15: "3.75rem",
                128: "32rem",
                144: "36rem",
            },
            container: {
                center: true,
            },
        },
        fontFamily: {
            poppins: "Poppins ,sans-serif",
            // nunito: "nunito', sans-serif",
            nunito: "Nunito, sans-serif",
        },
        fontSize: {
            display1: [
                "6rem",
                {
                    fontFamily: "poppins",
                    fontWeight: "600",
                    lineHeight: "6.375rem",
                },
            ],
            title1: [
                "4rem",
                {
                    fontFamily: "poppins",
                    fontWeight: "600",
                    lineHeight: "4.375rem",
                },
            ],
            title2: [
                "3rem",
                {
                    fontFamily: "poppins",
                    fontWeight: "600",
                    lineHeight: "3.25rem",
                },
            ],
            title3: [
                "2.25rem",
                {
                    fontFamily: "poppins",
                    fontWeight: "700",
                    lineHeight: "2.6875rem",
                },
            ],
            title4: [
                "2rem",
                {
                    fontFamily: "poppins",
                    fontWeight: "700",
                    lineHeight: "2.625rem",
                },
            ],
            title5: [
                "1.5rem",
                {
                    fontFamily: "poppins",
                    fontWeight: "700",
                    lineHeight: "1.625rem",
                },
            ],
            title6: [
                "1.25rem",
                {
                    fontFamily: "poppins",
                    fontWeight: "700",
                    lineHeight: "1.25rem",
                },
            ],

            overline: [
                "0.75rem",
                {
                    fontFamily: "poppins",
                    fontWeight: "700",
                    lineHeight: "1rem",
                },
            ],
            button: [
                "0.875rem",
                {
                    fontFamily: "poppins",
                    fontWeight: "700",
                    lineHeight: "1rem",
                },
            ],
            body: [
                "1.125rem",
                {
                    fontFamily: "poppins",
                    fontWeight: "500",
                    lineHeight: "1.5rem",
                },
            ],
            bodyBold: [
                "1.125rem",
                {
                    fontFamily: "poppins",
                    fontWeight: "700",
                    lineHeight: "1.575rem",
                },
            ],
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        function ({ addComponents }) {
            addComponents({
                ".container": {
                    maxWidth: "100%",
                    "@screen sm": {
                        maxWidth: "540px",
                    },
                    "@screen md": {
                        maxWidth: "720px",
                    },
                    "@screen lg": {
                        maxWidth: "960px",
                    },
                    "@screen xl": {
                        maxWidth: "1280px",
                    },
                },
            });
        },
    ],
};
