import { defineStore } from "pinia";
import axios from "axios";

axios.defaults.withCredentials = true;

export const useAuthStore = defineStore("auth", {
    state: () => ({
        user: null,
        token: null,
        isAuthenticated: false,
    }),

    actions: {
        async register(userData) {
            try {
                const response = await axios.post(
                    route("auth.register"),
                    userData
                );
                this.setAuthData(response.data);
                return response.data;
            } catch (error) {
                console.error("Registration failed:", error);
                throw error;
            }
        },

        async login(credentials) {
            try {
                const response = await axios.post(
                    route("auth.login"),
                    credentials
                );
                const { user, token } = response.data;
                this.setUser(user);
                this.setToken(token);
                return { user, token };
            } catch (error) {
                console.error("Login failed:", error);
                throw error;
            }
        },

        async logout() {
            try {
                await axios.post(route("auth.logout"));
                this.clearAuthData();
            } catch (error) {
                console.error("Logout failed:", error);
                throw error;
            }
        },

        async fetchUser() {
            try {
                const response = await axios.get(route("auth.user"));
                this.setUser(response.data.data);
                console.log(response.data);
                return response.data;
            } catch (error) {
                console.error("Fetching user failed:", error);
                throw error;
            }
        },

        setAuthData(data) {
            this.setUser(data.user);
            this.setToken(data.token);
        },

        setUser(user) {
            this.user = user;
            this.isAuthenticated = !!user;
        },

        setToken(token) {
            this.token = token;
            localStorage.setItem("token", token);
            axios.defaults.headers.common["Authorization"] = `Bearer ${token}`;
        },

        clearAuthData() {
            this.user = null;
            this.token = null;
            this.isAuthenticated = false;
            localStorage.removeItem("token");
            delete axios.defaults.headers.common["Authorization"];
        },

        initializeAuth() {
            const token = localStorage.getItem("token");
            if (token) {
                this.setToken(token);
                this.fetchUser();
            }
        },
    },
});
