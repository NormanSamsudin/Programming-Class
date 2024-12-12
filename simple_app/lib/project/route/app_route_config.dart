import 'package:flutter/material.dart';
import 'package:go_router/go_router.dart';
import 'package:simple_app/pages/about_page.dart';
import 'package:simple_app/pages/contact_page.dart';
import 'package:simple_app/pages/home_page.dart';
import 'package:simple_app/pages/profile_page.dart';

class MyAppRouter {
  GoRouter router = GoRouter(routes: [
    GoRoute(
        name: 'home',
        path: '/',
        pageBuilder: (context, state) {
          return MaterialPage(child: HomePage());
        }),
    GoRoute(
        name: 'profile',
        path: '/profile',
        pageBuilder: (context, state) {
          return MaterialPage(child: ProfilePage());
        }),
    GoRoute(
        name: 'about',
        path: '/about',
        pageBuilder: (context, state) {
          return MaterialPage(child: AboutPage());
        }),
    GoRoute(
        name: 'contact',
        path: '/contact',
        pageBuilder: (context, state) {
          return MaterialPage(child: ContactPage());
        })
  ]);
}
