import 'package:flutter/material.dart';
import 'package:go_router/go_router.dart';
import 'package:simple_app/pages/about_page.dart';
import 'package:simple_app/pages/contact_page.dart';
import 'package:simple_app/pages/error_page.dart';
import 'package:simple_app/pages/home_page.dart';
import 'package:simple_app/pages/profile_page.dart';
import 'package:simple_app/project/route/app_route_conts.dart';

class MyAppRouter {
  static CustomTransitionPage buildPageWithDefaultTransition<T>({
    required BuildContext context,
    required GoRouterState state,
    required Widget child,
  }) {
    return CustomTransitionPage<T>(
      key: state.pageKey,
      child: child,
      transitionsBuilder: (context, animation, secondaryAnimation, child) =>
          FadeTransition(
        opacity: animation,
        child: child,
      ),

      //     FadeTransition(
      //   opacity: animation,
      //   child: ScaleTransition(
      //     scale: Tween<double>(
      //       begin: 0.8,
      //       end: 1.0,
      //     ).animate(animation),
      //     child: child,
      //   ),
      // ),

      // SlideTransition(
      //   position: Tween<Offset>(
      //     begin: const Offset(0, 1), // Slide in from the bottom
      //     end: Offset.zero,
      //   ).animate(CurvedAnimation(
      //     parent: animation,
      //     curve: Curves
      //         .easeInOut, // Choose from predefined curves or define your own
      //   )),
      //   child: child,
      // )

      // SlideTransition(
      //   position: Tween<Offset>(
      //     begin: const Offset(1, 0), // Start off-screen to the right
      //     end: Offset.zero, // End at the center of the screen
      //   ).animate(animation),
      //   child: child,
      // )
    );
  }

  GoRouter router = GoRouter(
      initialLocation: '/home',
      routes: [
        GoRoute(
          name: MyAppRouteConst.homeRouteName,
          path: '/home',
          pageBuilder: (context, state) => buildPageWithDefaultTransition<void>(
            context: context,
            state: state,
            child: HomePage(),
          ),
        ),
        GoRoute(
          name: MyAppRouteConst.profileRouteName,
          path: '/profile',
          pageBuilder: (context, state) => buildPageWithDefaultTransition<void>(
            context: context,
            state: state,
            child: ProfilePage(),
          ),
        ),
        GoRoute(
          name: MyAppRouteConst.aboutRouteName,
          path: '/about',
          pageBuilder: (context, state) => buildPageWithDefaultTransition<void>(
            context: context,
            state: state,
            child: AboutPage(),
          ),
        ),
        GoRoute(
          name: MyAppRouteConst.contactRouteName,
          path: '/contact',
          pageBuilder: (context, state) => buildPageWithDefaultTransition<void>(
            context: context,
            state: state,
            child: ContactPage(),
          ),
        )
      ],
      errorPageBuilder: (context, state) {
        return MaterialPage(child: ErrorPage());
      });
}
